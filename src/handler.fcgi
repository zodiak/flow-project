#!/usr/bin/python
import os, sys

PROJECT_DIR = os.path.dirname(os.path.abspath(__file__))
sys.path.insert(0, PROJECT_DIR)
#sys.path.insert(0, os.path.dirname(PROJECT_DIR))

os.environ['DJANGO_SETTINGS_MODULE'] = "settings"

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false")

