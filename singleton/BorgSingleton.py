class Borg(object):
	_shared_state = {}

	def __new__(cls, *args, **kwargs):
		obj = super(Borg, cls).__new__(cls, *args, **kwargs)
		obj.__dict__ = cls._shared_state
		return obj

class Child(Borg):
	pass

borg = Borg()
another = Borg()

compare = borg is another
print compare

child = Child()

borg.first_var = "first"
print child.first_var