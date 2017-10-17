from django.conf.urls import url
from . import views
from django.contrib.auth.views import login, logout_then_login

#La url() pasa cuatro argumentos, dos obligatorios:
#regex y view, y dos opcionales: kwargs y name. En este punto, vale la pena revisar para que sirven estos argumentos.
urlpatterns = [
    url(r'^Index$',views.Index.as_view(), name='Index'),
    url(r'^$',login, {'template_name': 'principal.html'}, name='login'),
    url(r'^Salir/$',logout_then_login, name='logout')
    ]