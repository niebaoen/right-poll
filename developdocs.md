# rightpoll 기획

## IA

* 첫 페이지 (index)
  * 당선자 목록 (elected-list)
  * 당선자 정보 / 공약 목록 (elected-info)
  * 공약 상세정보 (policy-info)

## DB 모델링

**당선자(Elected)**

* DB 테이블명: elected
* 선출직 공무원 당선 정보

필드명|레이블|형식
---|---|---
id|번호|int
link|페이지주소|text
name|이름|text
chair|직위|text
elected_date|당선일|yyyy-mm-dd
created_at|등록일|yyyy-mm-dd
modified_at|수정일|yyyy-mm-dd

**공약 구분(Policy Category)**:

* DB 테이블명: polecat
* 공약 구분

필드명|레이블|형식
---|---|---
id|번호|int
label|카테고리명|text
desc|설명|rich-text
elected_id|당선자번호|int
created_at|등록일|yyyy-mm-dd
modified_at|수정일|yyyy-mm-dd

**공약(policy)**

* DB 테이블명: policy
* 공약 상세

필드명|레이블|형식
---|---|---
id|번호|int
title|구분명|text
desc|설명|rich-text
polcat_id|카테고리 번호|int
elected_id|당선자 번호|int
created_at|등록일|yyyy-mm-dd
modified_at|수정일|yyyy-mm-dd

**이행안(plan)**

* DB 테이블명: plan
* 공약의 이행안. 향후 이행률 측정시 이행안의 수행 여부를 기준으로 측정.

필드명|레이블|형식
---|---|---
id|번호|int
name|내용|text
pol_id|카테고리번호|int
created_at|등록일|yyyy-mm-dd
modified_at|수정일|yyyy-mm-dd

**좋아요수(like counter)**

* DB 테이블명: like_c
* 좋아요 수

필드명|레이블|형식
---|---|---
id|번호|int
policy_id|공약번호|text
like|좋아요 수|int
created_at|등록일|yyyy-mm-dd
modified_at|수정일|yyyy-mm-dd

**좋아요(like)**

* DB 테이블명: like_up
* 좋아요 히스토리

필드명|레이블|형식
---|---|---
id|번호|int
policy_id|공약번호|int
type|타입|var|(done,cancel)
user|세션|var
created_at|등록일|yyyy-mm-dd
modified_at|수정일|yyyy-mm-dd

**댓글(comment)**

* DB 테이블명: comment
* 댓글 (당선자 댓글, 공약 댓글)

필드명|레이블|형식
---|---|---
id|번호|int
comment_id|상위 코멘트|int
elected_id|당선자 번호|int
policy_id|공약 번호|int
contents|내용|longtext
session|세션|var
user|사용자|var
created_at|등록일|yyyy-mm-dd
modified_at|수정일|yyyy-mm-dd
