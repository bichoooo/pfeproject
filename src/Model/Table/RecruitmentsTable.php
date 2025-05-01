<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recruitments Model
 *
 * @property \App\Model\Table\JobsTable&\Cake\ORM\Association\BelongsTo $Jobs
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Recruitment newEmptyEntity()
 * @method \App\Model\Entity\Recruitment newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Recruitment> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recruitment get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Recruitment findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Recruitment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Recruitment> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recruitment|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Recruitment saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Recruitment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Recruitment>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Recruitment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Recruitment> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Recruitment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Recruitment>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Recruitment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Recruitment> deleteManyOrFail(iterable $entities, array $options = [])
 */
class RecruitmentsTable extends Table
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

        $this->setTable('recruitments');
        $this->setDisplayField('recruitment_type');
        $this->setPrimaryKey('id');

        $this->belongsTo('Jobs', [
            'foreignKey' => 'jobs_id',
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'departments_id',
        ]);
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
            ->integer('jobs_id')
            ->allowEmptyString('jobs_id');

        $validator
            ->integer('departments_id')
            ->allowEmptyString('departments_id');

        $validator
            ->scalar('recruitment_type')
            ->requirePresence('recruitment_type', 'create')
            ->notEmptyString('recruitment_type');

        $validator
            ->scalar('available_profile_nbr')
            ->maxLength('available_profile_nbr', 255)
            ->allowEmptyString('available_profile_nbr');

        $validator
            ->scalar('state')
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->integer('users_id')
            ->allowEmptyString('users_id');

        $validator
            ->dateTime('posted_date')
            ->allowEmptyDateTime('posted_date');

        $validator
            ->dateTime('deadline_date')
            ->allowEmptyDateTime('deadline_date');

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
        $rules->add($rules->existsIn(['jobs_id'], 'Jobs'), ['errorField' => 'jobs_id']);
        $rules->add($rules->existsIn(['departments_id'], 'Departments'), ['errorField' => 'departments_id']);
        $rules->add($rules->existsIn(['users_id'], 'Users'), ['errorField' => 'users_id']);

        return $rules;
    }
}
