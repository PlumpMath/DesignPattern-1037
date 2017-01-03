class ClassicSingleton(object):
	def __new__(cls):
		if not hasattr(cls, 'instance'):
			cls.instance = super(ClassicSingleton, cls).__new__(cls)
		return cls.instance

first_singleton = ClassicSingleton()
second_singleton = ClassicSingleton()

compare = first_singleton is second_singleton
print compare

first_singleton.value_1 = "One"
print second_singleton.value_1

second_singleton.value_1 = "two"
print second_singleton.value_1
