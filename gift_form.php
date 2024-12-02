<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Final exam</title>
  </head>
  <body>
    <h2>Final exam</h2>

    <form action="process.php" method="POST">
      <span style="color: coral; font-weight: bold">Available Gifts:</span>
      <ol start="0">
        <li>Book</li>
        <li>Toy</li>
        <li>Gadget</li>
        <li>Video Game</li>
        <li>Headphones</li>
        <li>Smartphone</li>
        <li>Laptop</li>
        <li>Watch</li>
        <li>Shoes</li>
        <li>Wallet</li>
        <li>Headset</li>
        <li>Camera</li>
        <li>Drone</li>
        <li>Smart Watch</li>
        <li>Bluetooth Speaker</li>
      </ol>

      <label style="color: coral; font-weight: bold" for="gift_indices"
        >Enter gift number separated by commas (e.g., 0,1,2):</label
      >
      <input
        style="margin-bottom: 10px"
        type="text"
        id="gift_indices"
        name="gift_indices"
        required
      />
      <br />

      <button style="color: coral" type="submit">Submit</button>
    </form>
  </body>
</html>
