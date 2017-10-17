# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models
from uuid import uuid4
from datetime import date
import os
from datetime import datetime

"""
def seleccionar_imagen(instance, filename):
	# El primer paso es extraer la extension de la imagen del  archivo original
    extension = os.path.splitext(filename)[1][1:]

    # Generamos la ruta relativa a MEDIA_ROOT donde almacenar  el archivo, usando la fecha actual (año/mes)
    ruta = os.path.join('Imagenes', date.today().strftime("%Y/%m"))

    # Generamos el nombre del archivo con un identificador aleatorio, y la extension del archivo original.
    nombre_archivo = '{}.{}'.format(uuid4().hex, extension)

    # Devolvermos la ruta completa
    return os.path.join(ruta, nombre_archivo)"""


# Create your models here.
class Categoria(models.Model):
	nombre_categoria = models.CharField(max_length=20)
	descripcion = models.TextField(max_length=150)
	#devuelve valor de la base de datos y no asi un objeto
	def __unicode__(self):
		return '{}'.format(self.nombre_categoria)

class Producto(models.Model):

	codigo_producto = models.CharField(max_length=20)
	nombre_producto = models.CharField(max_length=50)
	#llave foranea de la tabla categoria
	IDcategoria = models.ForeignKey(Categoria, on_delete=models.CASCADE, null=True, blank=True)
	cantidad = models.PositiveSmallIntegerField(default=1)
	precio_por_unidad = models.FloatField(default=1)
	descripcion = models.TextField(max_length=250)
	fecha = models.DateTimeField(default=datetime.now(), blank=None, null=None)
	fotografia = models.ImageField(upload_to = 'photos', null=True , blank=True)
#	fotografia = models.BinaryField(blank=True)


	def __unicode__(self):
		return '{}'.format(self.nombre_producto)
"""
class Album(models.Model):
    owner = models.ForeignKey('auth.User')
    title = models.CharField(max_length=200)
    timestamp = models.DateTimeField(auto_now_add=True, auto_now=False)
    updated = models.DateTimeField(auto_now_add=False, auto_now=True)

    def __unicode__(self,):
        return self.title

class AlbumImage(models.Model):
    album = models.ForeignKey(Album, related_name='images')
    image = models.ImageField(upload_to='albums/images/')

    def __unicode__(self,):
        return str(self.image)
"""