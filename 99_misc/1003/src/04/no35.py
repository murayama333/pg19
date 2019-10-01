# no35.py

numbers = [1, 5, 9, 2, 6, 7, 3, 4, 8]
max = 0
for n in numbers:
  if max < n:
    max = n
print(max)