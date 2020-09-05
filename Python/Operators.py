x = 5
print(x > 3 and x < 10)

x = 2
print(not(x > 3 and x < 10))

x = ["apple", "banana"]
y = ["apple", "banana"]
z = x
print(x is z)
# returns True because z is the same object as x
print(x is y)
# returns False because x is not the same object as y, 
# even if they have the same content
print(x == y)
# to demonstrate the difference betweeen "is" and "==": 
# this comparison returns True because x is equal to y

x = ["apple", "banana"]
y = ["apple", "banana"]
z = x

print(x is not z)
# returns False because z is the same object as x
print(x is not y)
# returns True because x is not the same object as y, 
# even if they have the same content
print(x != y)
# to demonstrate the difference betweeen "is not" and "!=": 
# this comparison returns False because x is equal to y

x = ["apple", "banana"]
print("banana" in x)
# can use at the int/float or string

x = ["apple", "banana"]
print("pineapple" not in x)