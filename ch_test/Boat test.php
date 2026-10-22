<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>船舶靠泊時間查詢系統</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        .container { max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #007BFF; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
        button:hover { background-color: #0056b3; }
        .result { margin-top: 20px; padding: 15px; border-radius: 4px; text-align: center; font-size: 1.2em; font-weight: bold; }
        .long-stay { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .normal-stay { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
    </style>
</head>
<body>

<div class="container">
    <h2>船舶靠泊時間判定</h2>
    
    <!-- 表單使用 POST 方法傳遞資料，並送回當前網頁 -->
    <form method="POST" action="">
        <div class="form-group">
            <label for="berthing_hours">請輸入靠泊時間（小時）：</label>
            <input type="number" id="berthing_hours" name="berthing_hours" min="0" step="0.1" required placeholder="例如：24.5">
        </div>
        <button type="submit">送出查詢</button>
    </form>

    <?php
    // 檢查是否有透過 POST 方法傳送資料
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // 取得使用者輸入的時間，並轉換為浮點數（支援小數點）
        $hours = floatval($_POST['berthing_hours']);
        
        // 核心邏輯判斷
        if ($hours >= 20) {
            $status = "長時間靠泊";
            $class = "long-stay";
        } else {
            $status = "一般靠泊";
            $class = "normal-stay";
        }
        
        // 顯示結果
        echo "<div class='result {$class}'>";
        echo "輸入時間：{$hours} 小時<br>";
        echo "判定結果：<strong>{$status}</strong>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
