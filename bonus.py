rate=input("enter your bonus rating letter btn A/G/P/S\t").upper()
year=int(input("enter your service years\t"))
bonus=0
if rate=='A':
    bonus= 5000
    if year>5:
        bonus+=500
elif rate=='G':
    bonus= 2000
    if year>5:
        bonus+=500
else:
    bonus='not allowed bonus'
print(f"your bonus is: ${bonus}")