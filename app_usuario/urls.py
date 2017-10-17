from django.conf.urls import url

from .views import RegistroUsuario
#La url() pasa cuatro argumentos, dos obligatorios:
#regex y view, y dos opcionales: kwargs y name. En este punto, vale la pena revisar para que sirven estos argumentos.
urlpatterns = [
    url(r'^$', RegistroUsuario.as_view(), name='registrar')
]