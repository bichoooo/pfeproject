<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LeaveRequests Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\LeaveRequest newEmptyEntity()
 * @method \App\Model\Entity\LeaveRequest newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\LeaveRequest> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LeaveRequest get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\LeaveRequest findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\LeaveRequest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\LeaveRequest> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LeaveRequest|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\LeaveRequest saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\LeaveRequest>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LeaveRequest>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LeaveRequest>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LeaveRequest> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LeaveRequest>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LeaveRequest>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LeaveRequest>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LeaveRequest> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LeaveRequestsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('leave_requests');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->scalar('leaves_type')
            ->allowEmptyString('leaves_type');

        $validator
            ->date('start_date')
            ->allowEmptyDate('start_date');

        $validator
            ->date('end_date')
            ->allowEmptyDate('end_date');

        $validator
            ->scalar('state')
            ->allowEmptyString('state');

        $validator
            ->date('requested_date')
            ->allowEmptyDate('requested_date');

        $validator
            ->date('approval_date')
            ->allowEmptyDate('approval_date');

        $validator
            ->scalar('reason')
            ->maxLength('reason', 255)
            ->allowEmptyString('reason');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
