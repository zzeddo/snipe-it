<?php

return [
    'custom_fields'		        => '사용자 정의 필드들',
    'manage'                    => '관리',
    'field'		                => '필드',
    'about_fieldsets_title'		=> '필드세트란',
    'about_fieldsets_text'		=> '필드 세트를 사용하면 특정 자산 모델 유형에 자주 사용되는 사용자 필드 그룹을 만들 수 있습니다.',
    'custom_format'             => '사용자 정규식 형태...',
    'encrypt_field'      	        => '필드 암호화',
    'encrypt_field_help'      => '경고: 필드을 암호화 하면 검색을 할 수 없습니다.',
    'encrypted'      	        => '암호화',
    'fieldset'      	        => '필드세트',
    'qty_fields'      	      => '필드수',
    'fieldsets'      	        => '필드세트',
    'fieldset_name'           => '필드세트명',
    'field_name'              => '필드명',
    'field_values'            => '필드 값',
    'field_values_help'       => '줄 당 한 개의 옵션을 선택하세요. 첫번째 줄 이후의 빈 줄은 무시됩니다.',
    'field_element'           => '양식 성분',
    'field_element_short'     => '성분',
    'field_format'            => '형식',
    'field_custom_format'     => '사용자 형식',
    'field_custom_format_help'     => '이 필드을 사용하면 유효성 검사를 위해 정규 표현식을 사용할 수 있습니다. "regex:"로 시작해야 합니다 - 예를 들어, 사용자정의 필드 값에 올바른 IMEI (15 자리) 가 포함되어 있는지 확인하려면 <code>regex: / ^ [0-9]{15} $ / </code>을 사용합니다.',
    'required'   		          => '필수사항',
    'req'   		              => '필수',
    'used_by_models'   		    => '적용 모델',
    'order'   		            => '순서',
    'create_fieldset'         => '신규 필드세트',
    'update_fieldset'         => '필드세트 수정',
    'fieldset_does_not_exist'   => '필드세트 :id 존재하지 않습니다.',
    'fieldset_updated'         => '필드세트 수정되었습니다.',
    'create_fieldset_title' => '신규 필드세트 생성',
    'create_field'            => '신규 사용자 필드',
    'create_field_title' => '신규 사용자 필드 생성',
    'value_encrypted'      	        => '이 필드의 값은 데이터베이스 내에서 암호화 되었습니다. 관리자만이 해독된 값을 확인 할 수 있습니다.',
    'show_in_email'     => '사용자에게 전송된 반출 이메일에 이 필드의 값을 포함 시키시겠습니까? 암호화 된 필드들은 이메일에 포함될 수 없습니다',
    'show_in_email_short'     => '이메일에 포함.',
    'help_text' => '도움말',
    'help_text_description' => '필드에 컨텍스트를 제공하기 위해 자산을 편집하는 동안 양식 요소 아래에 표시되는 선택적 텍스트입니다.',
    'about_custom_fields_title' => '사용자 필드 정보',
    'about_custom_fields_text' => '사용자 필드를 사용하면 자산에 임의의 속성을 추가할 수 있습니다..',
    'add_field_to_fieldset' => '필드세트에 필드 추가',
    'make_optional' => '필수 - 선택으로 하려면 클릭하세요',
    'make_required' => '선택 - 필수로 하려면 클릭하세요',
    'reorder' => '재정열',
    'db_field' => 'DB 필드',
    'db_convert_warning' => '경고. 이 필드는 사용자 필드 테이블에 <code>:db_column</code> 으로 있지만 <code>:expected</code>여야 합니다.',
    'is_unique' => '이 값은 모든 자산에서 고유해야 합니다.',
    'unique' => '고유',
    'display_in_user_view' => '반출한 사용자가 할당된 자산 보기 페이지에서 값을 볼 수 있도록 허용합니다.',
    'display_in_user_view_table' => '사용자에게 표시',
    'auto_add_to_fieldsets' => '모든 신규 필드세트에 자동으로 추가',
    'add_to_preexisting_fieldsets' => '기존 필드 세트에 추가',
    'show_in_listview' => '기본적으로 목록 보기에 표시됩니다. 승인된 사용자는 여전히 열 선택기를 통해 표시하거나 숨길 수 있습니다.',
    'show_in_listview_short' => '목록에 표시',
    'show_in_requestable_list_short' => '요청 가능한 자산 목록에 표시',
    'show_in_requestable_list' => '요청 가능한 자산 목록에 값을 표시합니다. 암호화된 필드는 표시되지 않습니다.',
    'encrypted_options' => '이 필드는 암호화되어 있으므로 일부 표시 옵션을 사용할 수 없습니다.',

];
