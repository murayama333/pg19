# no47.py

def calc_total(array):
  total = 0
  for e in array:
    total = total + e
  return total

sales = [1000, 800, 200]
result = calc_total(sales)
print(result)