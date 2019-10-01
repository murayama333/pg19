# no36.py

sales = [1000, 800, 200]
tax = 1.1
total = 0
for sale in sales:
  total = total + sale

total = total * tax
print(total)