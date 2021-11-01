# Generated by Django 3.2.8 on 2021-10-31 21:53

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Task',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=255)),
                ('completed', models.BooleanField(blank=True, default=False, null=True)),
                ('created_at', models.DateTimeField()),
            ],
        ),
    ]
