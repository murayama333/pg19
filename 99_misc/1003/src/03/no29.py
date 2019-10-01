# no29.py

english = int(input())
math = int(input())
science = int(input())

if not (english < 60 and math < 60 and science < 60):
  print("OK")
else:
  print("NG")