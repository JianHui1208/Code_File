while True:
	print("Options: ")
	print("Enter 'add' to add two numbers")
	print("Enter 'subtract' to subtract two numbers")
	print("Enter 'multiply' to multiply two numbers")
	print("Enter 'divide' to divide two numbers")
	print("Enter 'quit' to end the program")
	user_input = input(": ")

	if user_input == "quit":
		break
	elif user_input == "add":
		num1 = float(input("First Number"))
		num2 = float(input("Second Number"))
		print(num1 + num2)
	elif user_input == "subract":
		num1 = float(input("First Number"))
		num2 = float(input("Second Number"))
		print(num1 - num2)
	elif user_input == "multiply":
		num1 = float(input("First Number"))
		num2 = float(input("Second Number"))
		print(num1 + num2)
	elif user_input == "divide":
		num1 = float(input("First Number"))
		num2 = float(input("Second Number"))
		print(num1 / num2)

	else:
		print("unknown input")