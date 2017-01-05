class ClassicSingleton(object):
	'''
		__new__ is is a static method (special-cased so you need not declare it as such) 
		that takes the class of which an instance was requested as its first argument
	'''
	def __new__(cls): 
		if not hasattr(cls, 'instance'): #check if class has not instantiated before
			cls.instance = super(ClassicSingleton, cls).__new__(cls) #return value of __new__ from parent class for reference
		return cls.instance

first_singleton = ClassicSingleton()
second_singleton = ClassicSingleton()

compare = first_singleton is second_singleton
print compare

first_singleton.value_1 = "One"
print second_singleton.value_1

second_singleton.value_1 = "two"
print second_singleton.value_1
