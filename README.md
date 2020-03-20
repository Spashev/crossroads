# CROSS_ROADS
<h3 align="center">PHP+OOP+SINGLETON</h3>

<h3 align="center">
<a href="http://codeguru.be/">CodeGuru</a>
</h3>

## About OOP

Каждое определение класса начинается с ключевого слова class, затем следует имя класса, и далее пара фигурных скобок, которые заключают в себе определение свойств и методов этого класса.

Именем класса может быть любое слово, при условии, что оно не входит в список зарезервированных слов PHP, начинается с буквы или символа подчеркивания и за которым следует любое количество букв, цифр или символов подчеркивания. Если задать эти правила в виде регулярного выражения, то получится следующее выражение: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$.

Класс может содержать собственные константы, переменные (называемые свойствами) и функции (называемые методами)...
- [Php OOP docs](https://www.php.net/manual/ru/language.oop5.php).

## About Singleton

Singleton – один из самых простых шаблонов для понимания. Основное назначение – гарантировать существование только одно экземпляра класса. Причиной обычно является следующее: требуется только один объект исходного класса и Вам необходимо, что бы объект был доступен в любом месте приложения, т.е. глобальный доступ.
Singleton — это порождающий паттерн, который гарантирует существование только одного объекта определённого класса, а также позволяет достучаться до этого объекта из любого места программы. Шаблон Singleton предполагает наличие статического метода для создания экземпляра класса, при обращении к которому возвращается ссылка на оригинальный объект.
- [Singleton habr](https://habr.com/ru/post/31375/).

## License

[GURU-team].
