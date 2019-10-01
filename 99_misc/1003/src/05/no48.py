# no48.py

def calc_max(array):
  max = 0
  for e in array:
    if max < e:
      max = e
  return max

sales = [1000, 800, 200]
result = calc_max(sales)
print(result)