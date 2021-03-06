"""compraVenta URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.11/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.conf.urls import url, include
    2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
"""
from django.conf.urls import include, url
from django.contrib import admin
from django.views.static import serve
from django.conf.urls.static import static
from django.conf import settings

admin.autodiscover()

urlpatterns = [
	url(r'^admin/', admin.site.urls),   
	url(r'^', include('app_inicio.urls', namespace='index')),
    url(r'^producto/', include('app_producto.urls', namespace='productos')),
	url(r'^registrar/', include('app_usuario.urls', namespace='registrar_user')),
    #fotografias
    url(r'^media/(?P<path>.*)$', serve ,{'document_root': settings.MEDIA_ROOT, } ),
]
#if settings.DEBUG:
 #   urlpatterns += static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)


if settings.DEBUG:
    urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
