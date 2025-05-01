<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Attendences Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Attendence newEmptyEntity()
 * @method \App\Model\Entity\Attendence newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Attendence> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Attendence get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Attendence findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Attendence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Attendence> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Attendence|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Attendence saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Attendence>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Attendence>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Attendence>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Attendence> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Attendence>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Attendence>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Attendence>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Attendence> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AttendencesTable extends Table
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

        $this->setTable('attendences');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
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
            ->integer('users_id')
            ->allowEmptyString('users_id');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->time('check_in_time')
            ->allowEmptyTime('check_in_time');

        $validator
            ->time('check_out_time')
            ->allowEmptyTime('check_out_time');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

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
        $rules->add($rules->existsIn(['users_id'], 'Users'), ['errorField' => 'users_id']);

        return $rules;
    }
}
