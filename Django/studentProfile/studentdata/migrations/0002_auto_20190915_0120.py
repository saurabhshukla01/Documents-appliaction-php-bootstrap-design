# Generated by Django 2.2.5 on 2019-09-14 19:50

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('studentdata', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='student',
            name='image',
            field=models.ImageField(upload_to='images'),
        ),
    ]
