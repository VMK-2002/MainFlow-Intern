@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\ingres\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\ingres\scripts\ctl.bat START)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\mysql\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\mysql\scripts\ctl.bat START)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\postgresql\scripts\ctl.bat START)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\apache\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\apache\scripts\ctl.bat START)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\openoffice\scripts\ctl.bat START)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\apache-tomcat\scripts\ctl.bat START)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\resin\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\resin\scripts\ctl.bat START)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\jetty\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\jetty\scripts\ctl.bat START)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\subversion\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\lucene\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\lucene\scripts\ctl.bat START)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\third_application\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\third_application\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\third_application\scripts\ctl.bat STOP)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\lucene\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\subversion\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\subversion\scripts\ctl.bat STOP)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\jetty\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\jetty\scripts\ctl.bat STOP)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\resin\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\resin\scripts\ctl.bat STOP)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\openoffice\scripts\ctl.bat STOP)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\apache\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\apache\scripts\ctl.bat STOP)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\ingres\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\ingres\scripts\ctl.bat STOP)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\mysql\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\mysql\scripts\ctl.bat STOP)
if exist C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\Veeramanikandan\OneDrive\Desktop\VMK\Projects\MainFlow-Intern\Form using PHP and MySQL\postgresql\scripts\ctl.bat STOP)

:end

