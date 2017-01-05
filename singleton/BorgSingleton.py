class Borg(object):
	_shared_state = {} #variable to save state every class instantiated

	def __new__(cls, *args, **kwargs):
		obj = super(Borg, cls).__new__(cls, *args, **kwargs) #return value of __new__ from parent class for reference
		obj.__dict__ = cls._shared_state #save value of shared_state to __dict__
		return obj

class Child(Borg):
	pass

borg = Borg()
another = Borg()
print borg._shared_state

compare = borg is another
print compare

child = Child()

borg.first_var = "first"
print child.first_var