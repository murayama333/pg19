# no49.py

def calc_rate(array):
  total = 0
  for e in array:
    total = total + e
  rates = []
  for e in array:
    rates.append(e / total)
  return rates

sales = [1000, 800, 200]
rates = calc_rate(sales)
for rate in rates:
  print(rate)