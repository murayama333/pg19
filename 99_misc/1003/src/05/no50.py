# no50.py

def search(array, target):
  for e in array:
    if e == target:
      return True
  return False

names = ["Alice", "Bob", "Carl"]
name = input()
result = search(names, name)
if result:
  print("Found")
else:
  print("Not Found")

