<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 10 - HTML Forms</title>
</head>
<body>

    <h1>HTML Forms</h1>

    <form method="post" action="#">

       
        <label for="name">Your Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Rose Sunflower"><br><br>

        <label for="email">Your Email:</label><br>
        <input type="email" id="email" name="email" placeholder="rose@example.com"><br><br>

        <label for="friendCount">How many historical figures do you know? </label><br>
        <input type="number" id="historicCount" name="historicCount" min="1" max="50000000" placeholder="Enter a number less than 50000000"><br><br>

        
        <fieldset>
            <legend style="margin-bottom: 20px;">Favorite Historical Figure</legend>

            <legend style="font-weight: bold; font-size: 18px;">How many of these historical figures have you heard of?</legend><br>
            <input type="checkbox" id="rosaParks" name="figures" value="rosaParks">
            <label for="rosaParks">Rosa Parks</label><br>

            <input type="checkbox" id="nelsonMandela" name="figures" value="nelsonMandela">
            <label for="nelsonMandela">Nelson Mandela</label><br>

            <input type="checkbox" id="martinLutherKing" name="figures" value="martinLutherKing">
            <label for="martinLutherKing">Martin Luther King</label><br>

            <input type="checkbox" id="malalaYousafzai" name="figures" value="malalaYousafzai">
            <label for="malalaYousafzai">Malala Yousafzai</label><br><br>

            <legend style="font-weight: bold; font-size: 18px;">How often do you learn about new historical figures?</legend><br>
            <input type="radio" id="daily" name="learneFrequency" value="daily">
            <label for="daily">Daily</label><br>

            <input type="radio" id="weekly" name="learnFrequency" value="weekly">
            <label for="weekly">Weekly</label><br>

            <input type="radio" id="occasionally" name="learnFrequency" value="occasionally">
            <label for="occasionally">Occasionally</label><br>

            <input type="radio" id="rarely" name="learnFrequency" value="rarely">
            <label for="rarely">Rarely</label><br><br>

        </fieldset><br>


        <label for="AdditionalInfo">Tell us about the most inspirational person you know ....</label><br><br>
        <textarea id="additionalInfo" name="additionalInfo" rows="4" cols="50" placeholder="Tell us more about yourself.."></textarea><br><br>

        
        <input type="submit" value="Connect with Your Values">

    </form>

</body>
</html>