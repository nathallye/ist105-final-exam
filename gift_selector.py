import sys

gifts = [
  "Book", "Toy", "Gadget", "Video Game", "Headphones",
  "Smartphone", "Laptop", "Watch", "Shoes", "Wallet",
  "Headset", "Camera", "Drone", "Smart Watch", "Bluetooth Speaker"
]

try:
  gift_indices = [int(value) for value in sys.argv[1].split(',')]

  for index in gift_indices:
    if index < 0 or index >= len(gifts):
      print("<span style='color: red;'>Error message: Gift index out of range.</span>")
      sys.exit()

  gift_unic_code = 0
  for index in gift_indices:
    gift_unic_code |= (1 << index)

  selected_gifts = [gifts[i] for i in gift_indices]

  html_output = (
    f"<p>Selected Gifts: <span style='color: green;'>{', '.join(selected_gifts)}</span></p>"
    f"<p>Unique Gift Code: <span style='color: green;'>{gift_unic_code}</span></p>"
  )
  print(html_output)

    
except ValueError:
  print("<span style='color: red;'>Error message: All gift numbers must be integers</span>")
  sys.exit()
