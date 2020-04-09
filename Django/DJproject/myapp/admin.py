#from django.contrib import admin
from django.http import HttpResponseRedirect, HttpResponse
from django.contrib import admin
from .models import Student

# Register your models here.

#change_form_template = "admin/student_change_form.html"

"""
    def make_published(modeladmin, request, queryset):
    for i in queryset:
       li = str(i).split(',')
    return  HttpResponseRedirect('../../../myapp/updatestudent/'+str(li[0]))
    queryset.update(password='1234567')
    make_published.short_description = 'Mark selected stories as published'
    
"""

#class StudentAdmin(admin.ModelAdmin):
##    list_display = ['title', 'status']
 #   ordering = ['title']
 #   actions = [make_published]

#admin.site.register(Article, ArticleAdmin)
admin.site.register(Student)
#admin.site.add_action(make_published)