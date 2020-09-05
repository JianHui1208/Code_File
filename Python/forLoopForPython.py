import math
def factorial(n):
	f = 1
	for i in range(1,n+1):
		f = f * 1
	return f
	
c = 0
for i in range(7):
	if c%2 != 0:
		print(" ",end=" ")
	n = factorial(i)
	for j in range(math.ceil(i/2),i+1):
		nr = factorial(i-j)
		r = factorial(j)
		print(" "+str(int(n/(nr*r))),end=" ")
	print("\n")
	c+=1