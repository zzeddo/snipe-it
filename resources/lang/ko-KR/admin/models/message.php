<?php

return array(

    'deleted' => '삭제된 자산 모델',
    'does_not_exist' => '모델이 존재하지 않습니다.',
    'no_association' => '경고! 이 항목의 자산 모델이 잘못되었거나 누락되었습니다!',
    'no_association_fix' => '예기치 못한 일이 발생할 수 있습니다. 지금 자산을 편집하여 모델을 할당하세요.',
    'assoc_users'	 => '이 모델은 현재 하나 이상의 자산들과 연결되어 있기에 삭제 할 수 없습니다. 자산들을 삭제하고 다시 삭제하길 시도하세요. ',


    'create' => array(
        'error'   => '모델이 생성되지 않았습니다. 다시 시도하세요.',
        'success' => '모델이 생성되었습니다.',
        'duplicate_set' => '이름, 제조사 그리고 모델 번호가 같은 자산 모델이 존재합니다.',
    ),

    'update' => array(
        'error'   => '모델이 갱신되지 않았습니다. 다시 시도하세요.',
        'success' => '모델이 갱신되었습니다.',
    ),

    'delete' => array(
        'confirm'   => '이 자산 모델을 삭제 하시겠습니까?',
        'error'   => '모델을 삭제하는 중 문제가 발생했습니다. 다시 시도해 주세요.',
        'success' => '모델이 삭제되었습니다.'
    ),

    'restore' => array(
        'error'   		=> '모델이 복원되지 않았습니다. 다시 시도해 주세요.',
        'success' 		=> '모델이 복원되었습니다.'
    ),

    'bulkedit' => array(
        'error'   		=> '변경된 항목이 없어서, 갱신되지 않습니다.',
        'success' 		=> '모델 변경 성공. |:model_count 개의 모델이 변경되었습니다.',
        'warn'          => '다음 모델의 속성을 변경하려 합니다.:|다음 모델의 :model_count models 개를 변경하려 합니다.:',

    ),

    'bulkdelete' => array(
        'error'   		    => '선택된 모델이 없기에, 삭제되지 않습니다.',
        'success' 		    => '모델 삭제됨!|:success_count 개의 모델 삭제됨!',
        'success_partial' 	=> ': success_count 개의 모델이 삭제되었지만, fail_count 개는 관련된 자산이 있기에 삭제할 수 없습니다.'
    ),

);
