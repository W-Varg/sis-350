# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.views.generic import ListView, CreateView
from django.shortcuts import render
from django.core.urlresolvers import reverse_lazy 
from .models import usuario
from .forms import RegistroUserForm

from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.models import User
# Create your views here.

class RegistroUsuario(CreateView):
	model = User
	template_name = 'registrar.html'
	form_class = RegistroUserForm
	success_url = reverse_lazy('productos:listar_producto')

"""
#listar basada en clases 
class PersonaList(ListView):
	model = usuario
	template_name = 'usuario_list.html'
"""
