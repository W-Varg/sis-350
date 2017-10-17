# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.views.generic import ListView, CreateView, DeleteView, UpdateView
from django.core.urlresolvers import reverse_lazy
from django.shortcuts import render


from .forms import ProductoForm
from .models import Producto
"""
def producto_vistafun(requets):
	obj_producto= Producto.objects.all()
	return render(requets, template_name='producto_list.html', context={'producto'= obj_producto})
"""


#createview basada en clases, crea el producto
class ProductoCreate(CreateView):
	model = Producto # el modelo que estamos referenciado
	form_class = ProductoForm  # nombre del formulario que se va a utilizar
	template_name = 'producto_form.html'
	success_url = reverse_lazy('productos:listar_producto')

#	def get_success_url(self):
#		return reverse('productos:listar_producto')


#clase listar los productos
class producto_list(ListView):
	model = Producto
	template_name = 'producto_list.html'   #el modelo plantilla por defecto esta 


class producto_update(UpdateView):
	model = Producto # el modulo
	form_class = ProductoForm  # nombre del formulario que se va a utilizar
	template_name = 'edit_modal.html'
	success_url = reverse_lazy('productos:listar_producto')
"""
class producto_delete(DeleteView):
	model = Producto # el modulo
	form_class = ProductoForm  # nombre del formulario que se va a utilizar
	template_name = 'producto_form.html'
	success_url =  reverse_lazy('productos:listar_producto')
"""

