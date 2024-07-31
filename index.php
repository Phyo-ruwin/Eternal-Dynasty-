<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Myanmar Baby Names</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="Header">
        <div class="logo">
            <h1>Eternal Dynasty</h1>
        </div>
    </div>

    <div class="container mt-5">
        <form action="process_form.php" method="post">
            <label for="gender">ကလေးအတွက် နာမည်ရွေးပေးဖို့ဖောင်ဖြည့်ပါ</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">ယောက်ျားလေး</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">မိန်းကလေး</label><br>
            
            <label for="dob">မွေးနေ့ကို ရွေးပေးပါ</label><br>
            <input type="date" id="dob" name="dob"><br>
            
            <input type="submit" name="btnSubmit" value="ရွေးမည်" class="btn btn-primary mt-3">
        </form>
    </div>
</body>
</html>
