https://extrememanual.net/13105

cd C:\php

php-cgi -b 127.0.0.1:9000



cd C:\nginx

start nginx









1) 서버의 패키지 목록 업데이트
sudo apt update
sudo apt upgrade
sudo apt autoremove

# Nginx 설치
sudo apt install nginx
# 설치된 Nginx 버전확인
sudo nginx -v
# Nginx 시작
sudo systemctl start nginx


2. 엔진엑스 위치
sudo find / -name nginx.conf

2. 엔진엑스 명령어
# 시작
sudo nginx
# 빠른 종료
sudo nginx -s stop
nginx.exe –s stop

# 정상 종료
sudo nginx -s quit 
# 재시작
sudo nginx -s restart
# 다시 로드
sudo nginx -s reload

# Nginx 시작 및 systemctl에 등록
sudo systemctl start nginx
#Nginx 중지
sudo systemctl stop nginx
# Nginx 재시작
sudo systemctl restart nginx
# Nginx 다시 로드
sudo systemctl reload nginx

# 부팅 시 Nginx 자동 시작 해제
sudo systemctl disable nginx
# 자동 재시작으로 다시 활성화 경우
sudo systemctl enable nginx

sudo systemctl status nginx

#엔진엑스 프로세스 홧인
ps -ef | grep nginx








vi 명령어
명령 모드에서 입력 모드로 전환
i: 커서 앞(왼쪽)에 입력
a: 커서 다음(오른쪽)에 입력
입력 모드에서 명령 모드로 전환

ESC
저장, 종료하기
명령 모드에서 콜론:을 이용하여 다양한 작업이 가능하다. (콜론 모드)

:q 종료
:q! 저장하지 않고 강제로 종료
:w 저장
:wq 저장 후 종료
ZZ 저장 후 종료 (:wq와 동일)
:wq 파일 이름: 저장 후 파일 이름 지정
** vi 에디터에서는 비정상 종료 시 .swp 파일이 생성된다. 필요하지 않은 경우 삭제한다.
커서 이동

h, j, k, l: 좌,하,상,우 커서 이동 (방향 키가 없는 키보드에서 사용)
w: 다음 단어의 첫 글자로 이동
b: 이전 단어의 첫 글자로 이동
G: 마지막 행으로 가기
:숫자: 지정한 숫자 행으로 이동 ex) :5
삭제

x: 커서에 있는 글자 삭제
X : 커서 앞에 있는 글자 삭제
dw : 커서를 기준으로 뒤에 있는 단어 글자 삭제 (커서 포함)
db : 커서를 기준으로 앞에 있는 단어 글자 삭제
dd : 커서가 있는 라인(줄) 삭제
** dw, db, dd 명령 앞에 삭제할 숫자를 지정 가능 ex) 3dw, 2db, 4dd
** 삭제 된 내용은 버퍼에 저장되어 붙여넣기가 가능
복사

yw : 커서를 기준으로 뒤에 있는 단어 글자 복사 (커서 포함)
yb : 커서를 기준으로 앞에 있는 단어 글자 복사
yy : 커서가 있는 라인(줄) 복사
** yw, yb, yy 명령 앞에 복사할 숫자를 지정 가능 ex) 3yw, 2yb, 4yy
붙여넣기 (복사, 삭제된 내용을 붙여넣는다.)

p : 커서 다음에 붙여넣기
P : 커서 이전에 붙여넣기
찾기

/문자열 : 앞에서 부터 문자열을 찾는다.
?문자열 : 뒤에서 부터 문자열을 찾는다.
n : 뒤로 검색
N : 앞으로 검색
바꾸기

:%s/old/new: 각 행의 처음 나오는 old를 찾아 new로 바꾼다.
:%s/old/new/g: 모든 old를 찾아 new로 바꾼다.
:%s/old/new/gc: 모든 old를 찾아 new로 바꾸기 전에 물어본다.
되돌리기(Undo), 다시실행(Redo)

u : 이전으로 되돌리기 (Undo)
Ctrl + r : 되돌리기한 것을 다시 실행 (Redo)
자주 사용하는 기능들

:set number: 행번호를 출력 (간단하게 :set nu)
:set nonumber: 행번호를 숨긴다. (간단하게 :set nonu)
:cd: 현재 디렉토리를 출력

ec2 ftp 설정
https://app-developer.tistory.com/92


https://www.youtube.com/watch?v=3yMY5phIaDc

https://blog.edit.kr/entry/AWS-EC2-%EC%97%90-putty%EB%A1%9C-%EC%97%B0%EA%B2%B0%ED%95%98%EA%B8%B0-PuTTYgen%EC%9C%BC%EB%A1%9C-pem%ED%8C%8C%EC%9D%BC%EC%9D%84-ppk%EB%A1%9C-%EB%B3%80%ED%99%98-%ED%95%84%EC%88%98

https://superuser.com/questions/1647896/putty-key-format-too-new-when-using-ppk-file-for-putty-ssh-key-authentication


포트확인
netstat -nap
netstat -nap | grep LISTEN
netstat -nap | grep 22

방화벽 포트열기
sudo iptables -I INPUT 1 -p tcp --dport 3000 -j ACCEPT
sudo iptables -I INPUT 1 -p tcp --dport 4000 -j ACCEPT


$ service nginx reload;

https://kscory.com/dev/nginx/install

https://kscory.com/dev/nginx/setting

https://whatisthenext.tistory.com/123


ftp 파일 쓰기 허용

sudo chown -R ubuntu:ubuntu /var/www/html


htm 파일 보기
 ls /var/www/html
 
 윈도우에서 종료
 /f /IM nginx.exe