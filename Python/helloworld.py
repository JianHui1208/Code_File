print("--------------")

print("hello, world!")
print("My Name is William")

print("--------------")

if 2 > 5:
	print("Five is greater than two!")
else:
	print("Answer is Wrong")
# 一定要空格的 没有空格就error了**
#if下面才要和else

print("--------------")

x = 5
y = "Hello, world!"
print(x)
print(y)

print("--------------")

x = 4 #now is int
x = "Ali" #now is string
print(x)

print("--------------")

'''
#Legal variable names:(Correct)
myvar = "John"
my_var = "John"
_my_var = "John"
myVar = "John"
MYVAR = "John"
myvar2 = "John"

#Illegal variable names:(Wrong)
2myvar = "John"
my-var = "John"
my var = "John"
'''

x, y, z = "Orange", "Banana", "Cherry"
print(x)
print(y)
print(z)

print("--------------")

x = y = z = "Orange"
print(x)
print(y)
print(z)

print("--------------")

x = "awesome"

def myfunc():
	x = "fantastic"
	print("Python is " + x)

myfunc()
print("Python is " + x)

print("--------------")

x = "awesome"

def myfunc():
	global x
	x = "fantastic"

myfunc()
print("Python is " + x)

print("--------------")

'''
Text Type:	str
Numeric Types:	int, float, complex
Sequence Types:	list, tuple, range
Mapping Type:	dict
Set Types:	set, frozenset
Boolean Type:	bool
Binary Types:	bytes, bytearray, memoryview
'''

'''
python data type
x = "Hello World"								str	
x = 20											int	
x = 20.5										float	
x = 1j											complex	
x = ["apple", "banana", "cherry"]				list	
x = ("apple", "banana", "cherry")				tuple	
x = range(6)									range	
x = {"name" : "John", "age" : 36}				dict	
x = {"apple", "banana", "cherry"}				set	
x = frozenset({"apple", "banana", "cherry"})	frozenset	
x = True										bool	
x = b"Hello"									bytes	
x = bytearray(5)								bytearray	
x = memoryview(bytes(5))						memoryview
'''

x = 1 # int
y = 2.8 # float
z = 1j # complex only has j

a = float(x)
b = int(y)
c = complex(y)

#convert from int to float
print(a)
#convert from float to int
print(b)
#convert from float to complex
print(c)

print("--------------")

import random
a = random.uniform(1,10) #(1 to 10 float)
b = random.randrange(1,10)
c = random.random() #(0 to 1 float)
print(a)
print(b)
print(c)

print("--------------")

x = int(2.2)
print(x)

# print("input Your Name")
# x = input()
# print("Input your Age")
# y = input()
# print("hi " + x)
# print("Your age is " + y)


print("--------------")

a = '''Lorem ipsum dolor sit amet,
consectetur adipiscing elit,
sed do eiusmod tempor incididunt'''
print(a)
# 如果你要打这种空格的就是要用三个开关引号

print("--------------")

# Java getCharacter same function
a = " Hello, World! " # length = 14
# This is array. Array start for 0
print(a[11] + a[10])
# start for second but get the thrid
print(a[2:9])
print(a[-5:-1])
# java string.length()
# This is length. Length is start for 1
print(len(a))
#remove space from the beginning or the and
x = a.strip()
print(x)
#lowercase and uppercase
print(x.lower())
print(x.upper())
print(x.replace("H", "J"))
print(x.split(","))

print("--------------")

Txt = "The rain in Spain stays stays mainly in the plain"
x = "ain" in Txt
y = "Rain" not in Txt
# return true false
print(x)
print(y)

print("--------------")

x = "hello"
y = "world"
z = x + y
print(z)

print("--------------")

age = 36
txt = "My name is John, I am {}"
print(txt.format(age))

print("--------------")

quantity = 3
itemNo = 567
price = 49.95
myorder = "I want {} price of itme {} for {} dollars."
print(myorder.format(quantity, itemNo, price))

print("--------------")

quantity = 3
itemNo = 567
price = 49.95
myorder = "I want {2} price of itme {0} for {1} dollars."
print(myorder.format(quantity, itemNo, price))
#quantity = 0 itemNo = 1 price = 2

print("-------------")

txt = "We are the so-called \"Vikings\" from the north."
print(txt)

print("-------------")

# \'	Single Quote	
# \\	Backslash	
# \n	New Line	
# \r	Carriage Return	
# \t	Tab	
# \b	Backspace	
# \f	Form Feed	
# \ooo	Octal value	
# \xhh	Hex value

print("Input two number:")
a = input()
b = input()

if b > a:
	print("b is greater than a")
elif b == a:
	print("b = a")
else:
	print("b is not greater than a")

print("-------------")

x = "hello"
y = 15
print(bool(x))
print(bool(y))

print("-------------")

class myClass():
	def __len__(self):
		return 1

myobj = myClass()
print(bool(myobj))

print("-------------")

def myFunction(a,b):
	if b > a:
		return("b is greater than a")
	elif b == a:
		return("b = a")
	else:
		return("b is not greater than a")

x = input()
y = input()

print(myFunction(x,y))

print("-------------")

x = 200
print(isinstance(x, int))

print("-------------")

z = 9|2
print(z)

print("-------------")
