<?php
// Загружаем и парсим XML файл
$xmlFile = 'data.xml';
$data = [];

if (file_exists($xmlFile)) {
    $xml = simplexml_load_file($xmlFile);
    if ($xml) {
        // Регистрируем пространство имен
        $xml->registerXPathNamespace('dtp', 'http://www.sample-package.org/dtp');
        
        // Получаем все узлы pck
        $pckNodes = $xml->xpath('//dtp:pck');
        
        foreach ($pckNodes as $pck) {
            $data[] = [
                'y' => (string)$pck->y,
                'a1' => (string)$pck->a1,
                'a2' => (string)$pck->a2,
                'b1' => (string)$pck->b1,
                'b2' => (string)$pck->b2,
                'c1' => (string)$pck->c1,
                'c2' => (string)$pck->c2,
                'd1' => (string)$pck->d1,
                'e1' => (string)$pck->e1,
                'f1' => (string)$pck->f1,
                'f2' => (string)$pck->f2,
                'f3' => (string)$pck->f3,
                'g1' => (string)$pck->g1,
                'g2' => (string)$pck->g2,
                'h1' => (string)$pck->h1,
                'h2' => (string)$pck->h2,
                'i1' => (string)$pck->i1,
                'i2' => (string)$pck->i2,
                'i3' => (string)$pck->i3,
                'i4' => (string)$pck->i4,
                'j1' => (string)$pck->j1,
                'j2' => (string)$pck->j2,
                'j3' => (string)$pck->j3,
                'j4' => (string)$pck->j4,
                'k1' => (string)$pck->k1,
                'k2' => (string)$pck->k2,
                'k3' => (string)$pck->k3,
                'k4' => (string)$pck->k4,
                'k5' => (string)$pck->k5
            ];
        }
    }
} else {
    $error = "Файл data.xml не найден";
}

// Определяем выбранный элемент (первый по умолчанию)
$selectedIndex = 0;
$selectedItem = !empty($data) ? $data[$selectedIndex] : null;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные из XML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1000px;
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
        .form-group {
            margin-bottom: 20px;
        }
        select {
            padding: 12px 15px;
            font-size: 16px;
            border: 2px solid #007bff;
            border-radius: 8px;
            background: white;
            width: 100%;
            max-width: 500px;
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
            font-size: 22px;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
        }
        .data-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
    </style>
</head>
<body>
    <div class="container">
        <h1>📊 Данные из XML файла</h1>
        
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <?php if (!empty($data)): ?>
            <div class="form-group">
                <label for="select_item">Выберите организацию:</label>
                <select name="select_item" id="select_item">
                    <?php foreach ($data as $index => $item): ?>
                        <option value="<?php echo $index; ?>" 
                            <?php if ($index === $selectedIndex) echo 'selected'; ?>>
                            <?php echo htmlspecialchars($item['y']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div id="card-container">
                <?php if ($selectedItem): ?>
                    <div class="card visible" id="data-card">
                        <div class="card-header">
                            <?php echo htmlspecialchars($selectedItem['y']); ?>
                        </div>
                        
                        <div class="data-grid">
                            <?php foreach ($selectedItem as $key => $value): ?>
                                <?php if ($key !== 'y'): ?>
                                    <div class="data-item">
                                        <div class="data-label"><?php echo strtoupper($key); ?></div>
                                        <div class="data-value"><?php echo htmlspecialchars($value); ?></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
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
        
        // Функция для обновления карточки
        function updateCard(selectedIndex) {
            const cardContainer = document.getElementById('card-container');
            const selectedItem = xmlData[selectedIndex];
            
            if (!selectedItem) return;
            
            // Создаем HTML для карточки
            let cardHtml = `
                <div class="card" id="data-card">
                    <div class="card-header">${escapeHtml(selectedItem.y)}</div>
                    <div class="data-grid">
            `;
            
            // Добавляем все поля кроме 'y'
            Object.keys(selectedItem).forEach(key => {
                if (key !== 'y') {
                    cardHtml += `
                        <div class="data-item">
                            <div class="data-label">${key.toUpperCase()}</div>
                            <div class="data-value">${escapeHtml(selectedItem[key])}</div>
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
        
        // Обработчик изменения select
        document.getElementById('select_item').addEventListener('change', function() {
            const selectedIndex = parseInt(this.value);
            updateCard(selectedIndex);
        });
        
        // Инициализация при загрузке страницы
        document.addEventListener('DOMContentLoaded', function() {
            // Автоматически выбираем первый элемент
            const select = document.getElementById('select_item');
            if (select && xmlData.length > 0) {
                // Убедимся, что карточка видима
                const card = document.getElementById('data-card');
                if (card) {
                    card.classList.add('visible');
                }
            }
            
            // Можно добавить дополнительную логику инициализации
            console.log('Данные загружены:', xmlData);
        });
        
        // Дополнительно: горячие клавиши для навигации
        document.addEventListener('keydown', function(e) {
            const select = document.getElementById('select_item');
            if (!select) return;
            
            const currentIndex = parseInt(select.value);
            
            if (e.key === 'ArrowDown' || e.key === 'ArrowRight') {
                e.preventDefault();
                const nextIndex = (currentIndex + 1) % xmlData.length;
                select.value = nextIndex;
                updateCard(nextIndex);
            } else if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') {
                e.preventDefault();
                const prevIndex = (currentIndex - 1 + xmlData.length) % xmlData.length;
                select.value = prevIndex;
                updateCard(prevIndex);
            }
        });
    </script>
</body>
</html>