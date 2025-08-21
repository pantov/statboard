<?php
// Загружаем и парсим XML файл
$xmlFile = 'data.xml';
$data = [];
$periods = [];

if (file_exists($xmlFile)) {
    $xml = simplexml_load_file($xmlFile);
    if ($xml) {
        // Регистрируем пространство имен
        $xml->registerXPathNamespace('dtp', 'http://www.sample-package.org/dtp');
        
        // Получаем все узлы pck
        $pckNodes = $xml->xpath('//dtp:pck');
        
        foreach ($pckNodes as $pck) {
            // Получаем все поля узла pck
            $item = [];
            foreach ($pck->children() as $field) {
                $fieldName = $field->getName();
                $item[$fieldName] = (string)$field;
            }
            $data[] = $item;
        }
        
        // Получаем периоды из поля date (берем первый узел pck)
        if (!empty($data[0]['date'])) {
            $dateValues = explode(';', $data[0]['date']);
            // Убираем пустые значения
            $dateValues = array_filter($dateValues, function($value) {
                return !empty($value);
            });
            // Берем только первые 16 периодов (как в XML)
            $periods = array_slice($dateValues, 0, 16);
        }
    }
} else {
    $error = "Файл data.xml не найден";
}

// Определяем выбранный элемент (первый по умолчанию)
$selectedOrgIndex = 0;
$selectedPeriodIndex = 0; // Текущий период (первый в списке)

// Получаем выбранные данные
$selectedOrg = !empty($data) ? $data[$selectedOrgIndex] : null;
$selectedPeriod = !empty($periods) ? $periods[$selectedPeriodIndex] : null;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анализ данных XML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .filters {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 25px;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 0;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #495057;
        }
        select {
            padding: 12px 15px;
            font-size: 16px;
            border: 2px solid #007bff;
            border-radius: 8px;
            background: white;
            width: 100%;
            cursor: pointer;
        }
        select:focus {
            outline: none;
            border-color: #0056b3;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
        }
        .card {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            border-left: 4px solid #28a745;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin-top: 25px;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }
        .card.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
        }
        .org-title {
            font-size: 22px;
            font-weight: bold;
            color: #28a745;
        }
        .period-title {
            font-size: 18px;
            color: #6c757d;
            background: #e9ecef;
            padding: 8px 15px;
            border-radius: 20px;
        }
        .data-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .data-item {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 18px;
            border-radius: 8px;
            border-left: 4px solid #007bff;
            transition: transform 0.2s ease;
        }
        .data-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .data-label {
            font-weight: bold;
            color: #495057;
            margin-bottom: 8px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .data-value {
            font-size: 20px;
            color: #212529;
            font-weight: 600;
            word-break: break-all;
        }
        .error {
            color: #dc3545;
            background: #f8d7da;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #f5c6cb;
        }
        .no-data {
            color: #6c757d;
            text-align: center;
            padding: 40px;
            font-style: italic;
            font-size: 18px;
        }
        .loading {
            text-align: center;
            padding: 20px;
            color: #6c757d;
        }
        .stats {
            margin-top: 20px;
            padding: 15px;
            background: #e9ecef;
            border-radius: 8px;
        }
        @media (max-width: 768px) {
            .filters {
                grid-template-columns: 1fr;
            }
            .data-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📊 Анализ данных учреждений</h1>
        
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <?php if (!empty($data) && !empty($periods)): ?>
            <div class="filters">
                <div class="form-group">
                    <label for="select_org">Выберите организацию:</label>
                    <select name="select_org" id="select_org">
                        <?php foreach ($data as $index => $item): ?>
                            <option value="<?php echo $index; ?>">
                                <?php echo htmlspecialchars($item['y'] ?? 'Без названия'); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="select_period">Выберите период:</label>
                    <select name="select_period" id="select_period">
                        <?php foreach ($periods as $index => $period): ?>
                            <option value="<?php echo $index; ?>">
                                <?php echo htmlspecialchars($period); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div id="card-container">
                <?php if ($selectedOrg && $selectedPeriod): ?>
                    <div class="card visible" id="data-card">
                        <div class="card-header">
                            <div class="org-title"><?php echo htmlspecialchars($selectedOrg['y'] ?? 'Без названия'); ?></div>
                            <div class="period-title">Период: <?php echo htmlspecialchars($selectedPeriod); ?></div>
                        </div>
                        
                        <div class="data-grid">
                            <?php 
                            // Показываем только основные поля (исключаем служебные)
                            $excludeFields = ['y', 'x', 'date'];
                            foreach ($selectedOrg as $key => $value): 
                                if (!in_array($key, $excludeFields)):
                                    // Получаем значение для выбранного периода
                                    $values = explode(';', $value);
                                    $periodValue = isset($values[$selectedPeriodIndex + 1]) ? $values[$selectedPeriodIndex + 1] : 'N/A';
                            ?>
                                <div class="data-item">
                                    <div class="data-label"><?php echo strtoupper($key); ?></div>
                                    <div class="data-value"><?php echo htmlspecialchars($periodValue); ?></div>
                                </div>
                            <?php 
                                endif;
                            endforeach; 
                            ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        <?php else: ?>
            <div class="no-data">
                Нет данных для отображения
            </div>
        <?php endif; ?>
    </div>

    <!-- Передаем данные в JavaScript -->
    <script>
        const xmlData = <?php echo json_encode($data, JSON_UNESCAPED_UNICODE); ?>;
        const periods = <?php echo json_encode($periods, JSON_UNESCAPED_UNICODE); ?>;
        
        // Функция для обновления карточки
        function updateCard(orgIndex, periodIndex) {
            const cardContainer = document.getElementById('card-container');
            const selectedOrg = xmlData[orgIndex];
            const selectedPeriod = periods[periodIndex];
            
            if (!selectedOrg || !selectedPeriod) return;
            
            // Создаем HTML для карточки
            let cardHtml = `
                <div class="card" id="data-card">
                    <div class="card-header">
                        <div class="org-title">${escapeHtml(selectedOrg.y || 'Без названия')}</div>
                        <div class="period-title">Период: ${escapeHtml(selectedPeriod)}</div>
                    </div>
                    <div class="data-grid">
            `;
            
            // Добавляем все поля кроме исключенных
            const excludeFields = ['y', 'x', 'date'];
            Object.keys(selectedOrg).forEach(key => {
                if (!excludeFields.includes(key)) {
                    const values = selectedOrg[key].split(';');
                    // periodIndex + 1 потому что первое значение всегда пустое
                    const periodValue = values[periodIndex + 1] || 'N/A';
                    
                    cardHtml += `
                        <div class="data-item">
                            <div class="data-label">${key.toUpperCase()}</div>
                            <div class="data-value">${escapeHtml(periodValue)}</div>
                        </div>
                    `;
                }
            });
            
            cardHtml += `
                    </div>
                </div>
            `;
            
            // Заменяем содержимое контейнера
            cardContainer.innerHTML = cardHtml;
            
            // Показываем карточку с анимацией
            setTimeout(() => {
                const card = document.getElementById('data-card');
                if (card) {
                    card.classList.add('visible');
                }
            }, 50);
        }
        
        // Функция для экранирования HTML
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
        
        // Обработчики изменения select
        document.getElementById('select_org').addEventListener('change', function() {
            const orgIndex = parseInt(this.value);
            const periodIndex = parseInt(document.getElementById('select_period').value);
            updateCard(orgIndex, periodIndex);
        });
        
        document.getElementById('select_period').addEventListener('change', function() {
            const periodIndex = parseInt(this.value);
            const orgIndex = parseInt(document.getElementById('select_org').value);
            updateCard(orgIndex, periodIndex);
        });
        
        // Инициализация при загрузке страницы
        document.addEventListener('DOMContentLoaded', function() {
            // Автоматически выбираем первую организацию и первый период
            const orgSelect = document.getElementById('select_org');
            const periodSelect = document.getElementById('select_period');
            
            if (orgSelect && periodSelect && xmlData.length > 0 && periods.length > 0) {
                // Убедимся, что карточка видима
                const card = document.getElementById('data-card');
                if (card) {
                    card.classList.add('visible');
                }
            }
            
            // Логируем данные для отладки
            console.log('Данные организаций:', xmlData);
            console.log('Периоды:', periods);
        });
        
        // Горячие клавиши для навигации
        document.addEventListener('keydown', function(e) {
            const orgSelect = document.getElementById('select_org');
            const periodSelect = document.getElementById('select_period');
            
            if (!orgSelect || !periodSelect) return;
            
            const currentOrgIndex = parseInt(orgSelect.value);
            const currentPeriodIndex = parseInt(periodSelect.value);
            
            // Навигация по организациям
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                const nextIndex = (currentOrgIndex + 1) % xmlData.length;
                orgSelect.value = nextIndex;
                updateCard(nextIndex, currentPeriodIndex);
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                const prevIndex = (currentOrgIndex - 1 + xmlData.length) % xmlData.length;
                orgSelect.value = prevIndex;
                updateCard(prevIndex, currentPeriodIndex);
            }
            
            // Навигация по периодам
            if (e.key === 'ArrowRight') {
                e.preventDefault();
                const nextIndex = (currentPeriodIndex + 1) % periods.length;
                periodSelect.value = nextIndex;
                updateCard(currentOrgIndex, nextIndex);
            } else if (e.key === 'ArrowLeft') {
                e.preventDefault();
                const prevIndex = (currentPeriodIndex - 1 + periods.length) % periods.length;
                periodSelect.value = prevIndex;
                updateCard(currentOrgIndex, prevIndex);
            }
        });
    </script>
</body>
</html>