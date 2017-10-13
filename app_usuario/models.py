# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models

# Create your models here.
class usuario(models.Model):
	nombre = models.CharField(max_length=50)
	apellido = models.CharField(max_length=50)
	correo = models.EmailField()
	celular = models.PositiveIntegerField()
	fecha_registro = models.DateField()
	#devuelve valor del usuario y no asi un objeto usuario
	def __unicode__(self):
		return '{} {}'.format(self.nombre,self.apellido)