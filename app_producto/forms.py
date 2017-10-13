from django import forms
from .models import Categoria, Producto

class  CategoriaForm(forms.ModelForm):
	
	class Meta:
		model = Categoria
		#son los campos que requerimos,
		#fields = '__all__' , significa todos los campos
		fields= [
				'nombre_categoria',
				'descripcion',
		]
		labels= {
				'nombre_categoria': 'Introduca nueva Categoria',
				'descripcion': 'detalle de Categoria',
		}
		widget= {
				'nombre_categoria': forms.TextInput(attrs={'class' : 'form-control' }),
				'descripcion': forms.TextInput(attrs={'class' : 'form-control'  }),
		}

class  ProductoForm(forms.ModelForm):
	
	class Meta:
		model = Producto # usamos el modelo Producto
		
		fields= '__all__'
		"""[
				'codigo_producto',
				'nombre_producto',
				'IDcategoria',
				'cantidad',
				'precio_por_unidad'
		]"""
		labels= {
				'codigo_producto':'Codigo de Producto',
				'nombre_producto':' Nombre del Producto',
				'IDcategoria':'Categoria',
				'cantidad':'Cantidad',
				'precio_por_unidad':'Precio por Unidad',
		}
		widget= {
				'codigo_producto': forms.TextInput(attrs={'class' : 'form-control' }),
				'nombre_producto': forms.TextInput(attrs={'class' : 'form-control' }),
				'IDcategoria': forms.Select(attrs={'class' : 'form-control' }),
				'cantidad': forms.TextInput(attrs={'class' : 'form-control' }),
				'precio_por_unidad': forms.TextInput(attrs={'class' : 'form-control' }),
		}



