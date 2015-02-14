# Craft MD5 Twig Filter Plugin
This is a plugin for Craft CMS to convert a string to an MD5 has in templates with a Twig filter.

Example usage in a template:

```
The MD5 hash of 'swordfish' is {{ "swordfish" | toMd5 }}.
```

Rendered result:

```
The MD5 hash of 'swordfish' is 15b29ffdce66e10527a65bc6d71ad94d.
```


## Instalation

To install this plugin, copy the 'md5converter' directory and its contents to your 'plugins' folder.