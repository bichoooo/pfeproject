<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobApplications Model
 *
 * @property \App\Model\Table\JobsTable&\Cake\ORM\Association\BelongsTo $Jobs
 *
 * @method \App\Model\Entity\JobApplication newEmptyEntity()
 * @method \App\Model\Entity\JobApplication newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\JobApplication> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobApplication get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\JobApplication findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\JobApplication patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\JobApplication> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobApplication|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\JobApplication saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\JobApplication>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\JobApplication>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\JobApplication>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\JobApplication> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\JobApplication>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\JobApplication>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\JobApplication>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\JobApplication> deleteManyOrFail(iterable $entities, array $options = [])
 */
class JobApplicationsTable extends Table
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

        $this->setTable('job_applications');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Jobs', [
            'foreignKey' => 'jobs_id',
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
            ->scalar('condidate_name')
            ->maxLength('condidate_name', 255)
            ->allowEmptyString('condidate_name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('resume')
            ->maxLength('resume', 255)
            ->allowEmptyString('resume');

        $validator
            ->scalar('cover_letter')
            ->maxLength('cover_letter', 255)
            ->allowEmptyString('cover_letter');

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
        $rules->add($rules->existsIn(['jobs_id'], 'Jobs'), ['errorField' => 'jobs_id']);

        return $rules;
    }
}
