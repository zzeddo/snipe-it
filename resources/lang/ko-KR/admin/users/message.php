<?php

return array(

    'accepted'                  => '이 자산이 승인되었습니다.',
    'declined'                  => '이 자산이 거부되었습니다.',
    'bulk_manager_warn'	        => '사용자가 성공적으로 갱신되었지만, 선택한 관리자가 편집할 사용자 목록에도 있었고, 사용자가 자신의 관리자가 아니 어서 관리자 항목이 저장되지 않았습니다. 관리자를 제외한 사용자를 다시 선택하십시오.',
    'user_exists'               => '사용자가 이미 존재합니다!',
    'user_not_found'            => '사용자가 존재하지 않습니다.',
    'user_login_required'       => '로그인 항목을 입력해 주세요.',
    'user_has_no_assets_assigned' => '현재 사용자에게 할당된 자산이 없습니다.',
    'user_password_required'    => '비밀번호를 입력해 주세요.',
    'insufficient_permissions'  => '권한 불충분.',
    'user_deleted_warning'      => '이 사용자는 삭제되었습니다. 그것들을 수정하려면 이 사용자를 복원하던가 새 자산들을 생성하세요.',
    'ldap_not_configured'        => '이 설치의 LDAP 통합이 구성이 되지 않았습니다.',
    'password_resets_sent'      => '활성화되고 유효한 이메일 주소를 가진 선택된 사용자에게 비밀번호 재설정 링크가 전송되었습니다.',
    'password_reset_sent'       => ':email 로 패스워드 재설정 링크가 발송되었습니다.',
    'user_has_no_email'         => '이 사용자는 프로필에 이메일 주소가 없습니다.',
    'log_record_not_found'        => '이 사용자와 일치하는 로그 기록을 찾을 수 없습니다.',


    'success' => array(
        'create'    => '사용자가 생성되었습니다.',
        'update'    => '사용자가 갱신 되었습니다.',
        'update_bulk'    => '사용자가 갱신 되었습니다.',
        'delete'    => '사용자가 삭제 되었습니다.',
        'ban'       => '사용자가 금지 처리 되었습니다.',
        'unban'     => '사용자의 금지 처리가 해제 되었습니다.',
        'suspend'   => '사용자를 대기 시켰습니다.',
        'unsuspend' => '사용자의 대기를 해제하였습니다.',
        'restored'  => '사용자를 복원하였습니다.',
        'import'    => '사용자를 내보냈습니다.',
    ),

    'error' => array(
        'create' => '사용자를 생성하는 중 문제가 발생했습니다. 다시 시도해 주세요.',
        'update' => '사용자를 갱신하는 중 오류가 발생했습니다. 다시 시도해 주세요.',
        'delete' => '사용자를 삭제하는 중 문제가 발생했습니다. 다시 시도해 주세요.',
        'delete_has_assets' => '이 사용자에게 품목이 할당되었고 삭제할 수 없습니다.',
        'delete_has_assets_var' => '사용자에게 아직 1개의 자산이 할당되어 있어 확인 부탁드립니다.|사용자에게  :count 개의 자산이 할당되어 있어 확인 부탁드립니다.',
        'delete_has_licenses_var' => '사용자에게 아직 1개의 라이센스 시트가 할당되어 있어 확인 부탁드립니다.|사용자에게 :count 개의 라이센스 시트가 할당되어 있어 확인 부탁드립니다.',
        'delete_has_accessories_var' => '사용자에게 아직 1개의 부속품이 할당되어 있어 확인 부탁드립니다.|사용자에게 :count 개의 부속품이 할달되어 있어 확인 부탁드립니다.',
        'delete_has_locations_var' => '사용자에게 1개의 위치를 관리하고 있어 다른 관리자를 선핵해 주세요.|사용자에게 :count 개의 위치를 관리하고 있어 다른 관리자를 선핵해 주세요.',
        'delete_has_users_var' => '사용자가 다른 사용자의 매니저입니다. 다른 관리자를 선택해 주세요.|사용자가 :count 팀원들의 매니저입니다. 다른 관리자를 선택해 주세요.',
        'unsuspend' => '사용자의 대기 해제 중 문제가 발생했습니다. 다시 시도하세요.',
        'import'    => '사용자를 내보내기 할 때 문제가 발생했습니다. 다시 시도하세요.',
        'asset_already_accepted' => '이 자산은 이미 수락되었습니다.',
        'accept_or_decline' => '이 자산을 승인 하거나 거부 하셔야 합니다.',
        'cannot_delete_yourself' => '정말 본인의 정보를 삭제하시겠습니까. 다시 생각해 주세요..',
        'incorrect_user_accepted' => '승인하려는 자산이 반출되지 않았습니다.',
        'ldap_could_not_connect' => 'LDAP 서버에 접속 할 수 없습니다. LDAP 설정 파일의 LDAP 서버 구성을 확인해 보세요.<br>LDAP 서버 오류:',
        'ldap_could_not_bind' => 'LDAP 서버와 동기화 할 수 없습니다. LDAP 설정 파일의 LDAP 서버 구성을 확인해 보세요.<br>LDAP 서버 오류: ',
        'ldap_could_not_search' => 'LDAP 서버를 찾을 수 없습니다. LDAP 설정 파일의 LDAP 서버 구성을 확인해 보세요.<br>LDAP 서버 오류:',
        'ldap_could_not_get_entries' => 'LDAP 서버 목록을 가져올 수 없습니다. LDAP 설정 파일의 LDAP 서버 구성을 확인해 보세요.<br>LDAP 서버 오류:',
        'password_ldap' => '이 계정의 비밀번호는 LDAP/Active 디렉토리에 의해 관리됩니다. 비밀번호를 변경하려면 IT 부서에 문의하세요. ',
    ),

    'deletefile' => array(
        'error'   => '파일이 삭제되지 않았습니다. 다시 시도해 주세요.',
        'success' => '파일이 삭제되었습니다.',
    ),

    'upload' => array(
        'error'   => '파일(들) 이 업로드 되지 않았습니다. 다시 시도해 주세요.',
        'success' => '파일(들) 이 업로드 되었습니다.',
        'nofiles' => '업로드 할 파일을 선택해 주세요',
        'invalidfiles' => '하나 이상의 파일이 너무 크거나 허용되지 않는 형식입니다. 허용되는 형식은 png, gif, jpg, doc, docx, pdf, txt 입니다.',
    ),

    'inventorynotification' => array(
        'error'   => '설정된 이메일이 없습니다..',
        'success' => 'The사용자에게 인벤토리에 대한 알림이 전달되었습니다.'
    )
);
