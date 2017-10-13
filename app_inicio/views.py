# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.views.generic import ListView
#from django.http import HttpResponse
from django.shortcuts import render
from django.views.generic import TemplateView

from app_producto.models import Producto

# Create your views here.
class Index(ListView):
	model = Producto
	template_name = 'principal.html'

#def pag_principal(request):
#	return render(request,'principal.html',{})
