x = 5
y = "Hello"
print(y)
print(x)
#print(x + y)

"""
This is a comment
written in
more than just one line
"""

x = int(3)      #Int value
y = str(9)      #String Value
z = float(10)   #Float Value

print(x+z) #Can
#print(x+y) #Cannot

x = 5
y = "john"

print(type(x))
print(type(y))

x = "john"
y = 'william'


x, y ,z = "Apple", "Banana", "Orange"
print(x)
print(y)
print(z)

x = y = z = "Apple"
print(x)
print(y)
print(z)


fruits = ["apple", "banana", "cherry"]
x, y, z = fruits
print(x)
print(y)
print(z)

x = "Apple"

def Function():
    print("it is " + x)

Function()

x = "awesome"

def myfunc():
  global x
  x = "fantastic"

myfunc()

print("Python is " + x)
