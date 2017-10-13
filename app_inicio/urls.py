from django.conf.urls import url
from . import views


#La url() pasa cuatro argumentos, dos obligatorios:
#regex y view, y dos opcionales: kwargs y name. En este punto, vale la pena revisar para que sirven estos argumentos.
urlpatterns = [
    url(r'^$',views.Index.as_view(), name='Index'),
    #url(r'^login/','django.contrib.auth.views.login',{'template_name': 'principal.html'}, name='login'),
]