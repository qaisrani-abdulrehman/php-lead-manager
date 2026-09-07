<head>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<form class="quote-form" method="POST" action="submit.php">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    <label for="phone">Phone</label>
    <input type="tel" name="phone" id="phone">
    <label for="service">Services</label>
    <select name="service" id="service">
        <option value="web_design">Web Design</option>
        <option value="seo">SEO</option>
        <option value="digital_marketing">Digital Marketing</option>
        <option value="branding">Branding</option>
    </select>
    <label for = "budget">Budget</label>
    <input type="number" name="budget" id="budget" required>
    <label for = "message">Message</label>
    <textarea name="message" id="message" rows="6" cols="18"></textarea>
    <input type="submit" value="Submit">
</form>