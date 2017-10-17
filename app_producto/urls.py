from django.conf.urls import url

from . import views
#, producto_update, producto_delete


#La url() pasa cuatro argumentos, dos obligatorios:
#regex y view, y dos opcionales: kwargs y name. En este punto, vale la pena revisar para que sirven estos argumentos.
urlpatterns = [
    url(r'^$', views.producto_list.as_view(), name='listar_producto'),
    url(r'^crear/', views.ProductoCreate.as_view(), name='crear_producto'),
 #   url(r'^listar/', producto_vistafun, name='lista_producto'),
    url(r'^editar/(?P<pk>\d+)/$', views.producto_update.as_view(), name='editar_producto'),
    #url(r'^eliminar/$', views.producto_delete.as_view(), name='eliminar_producto'),
]