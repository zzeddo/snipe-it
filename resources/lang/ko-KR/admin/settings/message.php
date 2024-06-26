<?php

return [

    'update' => [
        'error'                 => '갱신 중 오류가 발생했습니다. ',
        'success'               => '설정이 갱신되었습니다.',
    ],
    'backup' => [
        'delete_confirm'        => '이 백업 파일을 지우시겠습니까? 이 동작은 되돌리기가 되지 않습니다. ',
        'file_deleted'          => '백업 파일이 삭제 되었습니다. ',
        'generated'             => '새 백업 파일이 생성되었습니다.',
        'file_not_found'        => '지정한 백업 파일을 서버에서 찾을 수 없습니다.',
        'restore_warning'       => '예, 복원할 경우 현재 데이터베이스에 있는 모든 기존 데이터를 덮어쓰게 됩며 기존 사용자(귀하 포함)도 모두 로그아웃됩니다.',
        'restore_confirm'       => ':filename에서 데이터베이스를 복원하시겠습니까??'
    ],
    'purge' => [
        'error'     => '삭제중 오류가 발생하였습니다. ',
        'validation_failed'     => '삭제 확인 절차가 잘못되었습니다. 확인 상자에 "DELETE"를 입력해 주세요.',
        'success'               => '삭제된 기록들이 삭제되었습니다.',
    ],
    'mail' => [
        'sending' => '테스트 이메일 전송...',
        'success' => '메일 전송!',
        'error' => '메일 전송 실패.',
        'additional' => '추가 오류 메시지가 없습니다. 메일 설정 및 앱 로그를 확인하세요.'
    ],
    'ldap' => [
        'testing' => 'LDAP 접속, 바인딩 & 쿼리 등 테스트합니다.',
        '500' => '500 서버 오류. 자세한 내용은 서버 로그를 확인하세요.',
        'error' => '문제가 발생했습니다. :(',
        'sync_success' => '설정에 따라 LDAP 서버에서 반환된 10명의 사용자 샘플:',
        'testing_authentication' => 'LDAP 인증 테스트...',
        'authentication_success' => '사용자가 LDAP 인증되었습니다.!'
    ],
    'webhook' => [
        'sending' => ':app 테스트 메시지 전송...',
        'success' => '당신의 :webhook_name 통합 작업!',
        'success_pt1' => '성공! 확인하세요 ',
        'success_pt2' => ' 테스트 메시지 채널을 선택하고 설정을 저장하려면 아래의 '저장'을 클릭하세요..',
        '500' => '500 서버 오류.',
        'error' => '문제가 발생했습니다. :app 응답 메세지: :error_message',
        'error_redirect' => '오류: 301/302 :endpoint 가 리디렉션을 반환합니다. 보안상의 이유로 리디렉션하지 않습니다. 실제 단말를 사용하세요.',
        'error_misc' => '문제가 발생했습니다. :( ',
    ]
];
