<?php

include (__DIR__).'/../vendor/autoload.php';

class SteemConfigTest extends PHPUnit_Framework_TestCase
{
	protected function setUp()
	{
		$this->SteemConfig = new \SteemPHP\SteemConfig;
	}

	public function constantTest()
	{
		$this->assertEquals('0.19.1', SteemConfig::STEEMIT_BLOCKCHAIN_VERSION);
		$this->assertEquals('0.19.1', SteemConfig::STEEMIT_BLOCKCHAIN_HARDFORK_VERSION);
		$this->assertEquals('STM8GC13uCZbP44HzMLV6zPZGwVQ8Nt4Kji8PapsPiNq1BK153XTX', SteemConfig::STEEMIT_INIT_PUBLIC_KEY_STR);
		$this->assertEquals('0', SteemConfig::STEEMIT_CHAIN_ID);
		$this->assertEquals('VESTS', SteemConfig::VESTS_SYMBOL);
		$this->assertEquals('STEEM', SteemConfig::STEEM_SYMBOL);
		$this->assertEquals('SBD', SteemConfig::SBD_SYMBOL);
		$this->assertEquals('STMD', SteemConfig::STMD_SYMBOL);
		$this->assertEquals('STEEM', SteemConfig::STEEMIT_SYMBOL);
		$this->assertEquals('STM', SteemConfig::STEEMIT_ADDRESS_PREFIX);
		$this->assertEquals('1458835200', SteemConfig::STEEMIT_GENESIS_TIME);
		$this->assertEquals('1458838800', SteemConfig::STEEMIT_MINING_TIME);
		$this->assertEquals('86400', SteemConfig::STEEMIT_CASHOUT_WINDOW_SECONDS_PRE_HF12);
		$this->assertEquals('43200', SteemConfig::STEEMIT_CASHOUT_WINDOW_SECONDS_PRE_HF17);
		$this->assertEquals('604800', SteemConfig::STEEMIT_CASHOUT_WINDOW_SECONDS);
		$this->assertEquals('2592000', SteemConfig::STEEMIT_SECOND_CASHOUT_WINDOW);
		$this->assertEquals('1209600', SteemConfig::STEEMIT_MAX_CASHOUT_WINDOW_SECONDS);
		$this->assertEquals('7200', SteemConfig::STEEMIT_VOTE_CHANGE_LOCKOUT_PERIOD);
		$this->assertEquals('60', SteemConfig::STEEMIT_UPVOTE_LOCKOUT_HF7);
		$this->assertEquals('43200', SteemConfig::STEEMIT_UPVOTE_LOCKOUT_HF17);
		$this->assertEquals('100000', SteemConfig::STEEMIT_ORIGINAL_MIN_ACCOUNT_CREATION_FEE);
		$this->assertEquals('1', SteemConfig::STEEMIT_MIN_ACCOUNT_CREATION_FEE);
		$this->assertEquals('2592000', SteemConfig::STEEMIT_OWNER_AUTH_RECOVERY_PERIOD);
		$this->assertEquals('86400', SteemConfig::STEEMIT_ACCOUNT_RECOVERY_REQUEST_EXPIRATION_PERIOD);
		$this->assertEquals('3600', SteemConfig::STEEMIT_OWNER_UPDATE_LIMIT);
		$this->assertEquals('3186477', SteemConfig::STEEMIT_OWNER_AUTH_HISTORY_TRACKING_START_BLOCK_NUM);
		$this->assertEquals('3', SteemConfig::STEEMIT_BLOCK_INTERVAL);
		$this->assertEquals('10512000', SteemConfig::STEEMIT_BLOCKS_PER_YEAR);
		$this->assertEquals('28800', SteemConfig::STEEMIT_BLOCKS_PER_DAY);
		$this->assertEquals('201600', SteemConfig::STEEMIT_START_VESTING_BLOCK);
		$this->assertEquals('864000', SteemConfig::STEEMIT_START_MINER_VOTING_BLOCK);
		$this->assertEquals('initminer', SteemConfig::STEEMIT_INIT_MINER_NAME);
		$this->assertEquals('1', SteemConfig::STEEMIT_NUM_INIT_MINERS);
		$this->assertEquals('0', SteemConfig::STEEMIT_INIT_TIME);
		$this->assertEquals('21', SteemConfig::STEEMIT_MAX_WITNESSES);
		$this->assertEquals('19', SteemConfig::STEEMIT_MAX_VOTED_WITNESSES_HF0);
		$this->assertEquals('1', SteemConfig::STEEMIT_MAX_MINER_WITNESSES_HF0);
		$this->assertEquals('1', SteemConfig::STEEMIT_MAX_RUNNER_WITNESSES_HF0);
		$this->assertEquals('20', SteemConfig::STEEMIT_MAX_VOTED_WITNESSES_HF17);
		$this->assertEquals('0', SteemConfig::STEEMIT_MAX_MINER_WITNESSES_HF17);
		$this->assertEquals('1', SteemConfig::STEEMIT_MAX_RUNNER_WITNESSES_HF17);
		$this->assertEquals('17', SteemConfig::STEEMIT_HARDFORK_REQUIRED_WITNESSES);
		$this->assertEquals('3600', SteemConfig::STEEMIT_MAX_TIME_UNTIL_EXPIRATION);
		$this->assertEquals('2048', SteemConfig::STEEMIT_MAX_MEMO_SIZE);
		$this->assertEquals('4', SteemConfig::STEEMIT_MAX_PROXY_RECURSION_DEPTH);
		$this->assertEquals('104', SteemConfig::STEEMIT_VESTING_WITHDRAW_INTERVALS_PRE_HF_16);
		$this->assertEquals('13', SteemConfig::STEEMIT_VESTING_WITHDRAW_INTERVALS);
		$this->assertEquals('604800', SteemConfig::STEEMIT_VESTING_WITHDRAW_INTERVAL_SECONDS);
		$this->assertEquals('10', SteemConfig::STEEMIT_MAX_WITHDRAW_ROUTES);
		$this->assertEquals('259200', SteemConfig::STEEMIT_SAVINGS_WITHDRAW_TIME);
		$this->assertEquals('100', SteemConfig::STEEMIT_SAVINGS_WITHDRAW_REQUEST_LIMIT);
		$this->assertEquals('432000', SteemConfig::STEEMIT_VOTE_REGENERATION_SECONDS);
		$this->assertEquals('5', SteemConfig::STEEMIT_MAX_VOTE_CHANGES);
		$this->assertEquals('1800', SteemConfig::STEEMIT_REVERSE_AUCTION_WINDOW_SECONDS);
		$this->assertEquals('3', SteemConfig::STEEMIT_MIN_VOTE_INTERVAL_SEC);
		$this->assertEquals('50000000', SteemConfig::STEEMIT_VOTE_DUST_THRESHOLD);
		$this->assertEquals('300', SteemConfig::STEEMIT_MIN_ROOT_COMMENT_INTERVAL);
		$this->assertEquals('20', SteemConfig::STEEMIT_MIN_REPLY_INTERVAL);
		$this->assertEquals('86400', SteemConfig::STEEMIT_POST_AVERAGE_WINDOW);
		$this->assertEquals('40000', SteemConfig::STEEMIT_POST_MAX_BANDWIDTH);
		$this->assertEquals('1600000000', SteemConfig::STEEMIT_POST_WEIGHT_CONSTANT);
		$this->assertEquals('30', SteemConfig::STEEMIT_MAX_ACCOUNT_WITNESS_VOTES);
		$this->assertEquals('10000', SteemConfig::STEEMIT_100_PERCENT);
		$this->assertEquals('100', SteemConfig::STEEMIT_1_PERCENT);
		$this->assertEquals('10', SteemConfig::STEEMIT_1_TENTH_PERCENT);
		$this->assertEquals('1000', SteemConfig::STEEMIT_DEFAULT_SBD_INTEREST_RATE);
		$this->assertEquals('978', SteemConfig::STEEMIT_INFLATION_RATE_START_PERCENT);
		$this->assertEquals('95', SteemConfig::STEEMIT_INFLATION_RATE_STOP_PERCENT);
		$this->assertEquals('250000', SteemConfig::STEEMIT_INFLATION_NARROWING_PERIOD);
		$this->assertEquals('7500', SteemConfig::STEEMIT_CONTENT_REWARD_PERCENT);
		$this->assertEquals('1500', SteemConfig::STEEMIT_VESTING_FUND_PERCENT);
		$this->assertEquals('100', SteemConfig::STEEMIT_MINER_PAY_PERCENT);
		$this->assertEquals('100000', SteemConfig::STEEMIT_MIN_RATION);
		$this->assertEquals('1000000', SteemConfig::STEEMIT_MAX_RATION_DECAY_RATE);
		$this->assertEquals('100', SteemConfig::STEEMIT_FREE_TRANSACTIONS_WITH_NEW_ACCOUNT);
		$this->assertEquals('604800', SteemConfig::STEEMIT_BANDWIDTH_AVERAGE_WINDOW_SECONDS);
		$this->assertEquals('1000000', SteemConfig::STEEMIT_BANDWIDTH_PRECISION);
		$this->assertEquals('6', SteemConfig::STEEMIT_MAX_COMMENT_DEPTH_PRE_HF17);
		$this->assertEquals('65535', SteemConfig::STEEMIT_MAX_COMMENT_DEPTH);
		$this->assertEquals('255', SteemConfig::STEEMIT_SOFT_MAX_COMMENT_DEPTH);
		$this->assertEquals('20000', SteemConfig::STEEMIT_MAX_RESERVE_RATIO);
		$this->assertEquals('30', SteemConfig::STEEMIT_CREATE_ACCOUNT_WITH_STEEM_MODIFIER);
		$this->assertEquals('5', SteemConfig::STEEMIT_CREATE_ACCOUNT_DELEGATION_RATIO);
		$this->assertEquals('2592000', SteemConfig::STEEMIT_CREATE_ACCOUNT_DELEGATION_TIME);
		$this->assertEquals('1 STEEM', SteemConfig::STEEMIT_MINING_REWARD);
		$this->assertEquals('140', SteemConfig::STEEMIT_EQUIHASH_N);
		$this->assertEquals('6', SteemConfig::STEEMIT_EQUIHASH_K);
		$this->assertEquals('604800', SteemConfig::STEEMIT_LIQUIDITY_TIMEOUT_SEC);
		$this->assertEquals('60', SteemConfig::STEEMIT_MIN_LIQUIDITY_REWARD_PERIOD_SEC);
		$this->assertEquals('3600', SteemConfig::STEEMIT_LIQUIDITY_REWARD_PERIOD_SEC);
		$this->assertEquals('1200', SteemConfig::STEEMIT_LIQUIDITY_REWARD_BLOCKS);
		$this->assertEquals('1200 STEEM', SteemConfig::STEEMIT_MIN_LIQUIDITY_REWARD);
		$this->assertEquals('1 STEEM', SteemConfig::STEEMIT_MIN_CONTENT_REWARD);
		$this->assertEquals('1 STEEM', SteemConfig::STEEMIT_MIN_CURATE_REWARD);
		$this->assertEquals('1 STEEM', SteemConfig::STEEMIT_MIN_PRODUCER_REWARD);
		$this->assertEquals('1 STEEM', SteemConfig::STEEMIT_MIN_POW_REWARD);
		$this->assertEquals('2 STEEM', SteemConfig::STEEMIT_ACTIVE_CHALLENGE_FEE);
		$this->assertEquals('30 STEEM', SteemConfig::STEEMIT_OWNER_CHALLENGE_FEE);
		$this->assertEquals('86400', SteemConfig::STEEMIT_ACTIVE_CHALLENGE_COOLDOWN);
		$this->assertEquals('86400', SteemConfig::STEEMIT_OWNER_CHALLENGE_COOLDOWN);
		$this->assertEquals('post', SteemConfig::STEEMIT_POST_REWARD_FUND_NAME);
		$this->assertEquals('comment', SteemConfig::STEEMIT_COMMENT_REWARD_FUND_NAME);
		$this->assertEquals('2592000', SteemConfig::STEEMIT_RECENT_RSHARES_DECAY_RATE_HF17);
		$this->assertEquals('1296000', SteemConfig::STEEMIT_RECENT_RSHARES_DECAY_RATE_HF19);
		$this->assertEquals('2000000000000', SteemConfig::STEEMIT_CONTENT_CONSTANT_HF0);
		$this->assertEquals('1.0203513558589E+14', SteemConfig::STEEMIT_APR_PERCENT_MULTIPLY_PER_BLOCK);
		$this->assertEquals('87', SteemConfig::STEEMIT_APR_PERCENT_SHIFT_PER_BLOCK);
		$this->assertEquals('1.339212037623E+14', SteemConfig::STEEMIT_APR_PERCENT_MULTIPLY_PER_ROUND);
		$this->assertEquals('83', SteemConfig::STEEMIT_APR_PERCENT_SHIFT_PER_ROUND);
		$this->assertEquals('1.1957715136428E+14', SteemConfig::STEEMIT_APR_PERCENT_MULTIPLY_PER_HOUR);
		$this->assertEquals('77', SteemConfig::STEEMIT_APR_PERCENT_SHIFT_PER_HOUR);
		$this->assertEquals('3875', SteemConfig::STEEMIT_CURATE_APR_PERCENT);
		$this->assertEquals('3875', SteemConfig::STEEMIT_CONTENT_APR_PERCENT);
		$this->assertEquals('750', SteemConfig::STEEMIT_LIQUIDITY_APR_PERCENT);
		$this->assertEquals('750', SteemConfig::STEEMIT_PRODUCER_APR_PERCENT);
		$this->assertEquals('750', SteemConfig::STEEMIT_POW_APR_PERCENT);
		$this->assertEquals('0.02 SBD', SteemConfig::STEEMIT_MIN_PAYOUT_SBD);
		$this->assertEquals('500', SteemConfig::STEEMIT_SBD_STOP_PERCENT);
		$this->assertEquals('200', SteemConfig::STEEMIT_SBD_START_PERCENT);
		$this->assertEquals('3', SteemConfig::STEEMIT_MIN_ACCOUNT_NAME_LENGTH);
		$this->assertEquals('16', SteemConfig::STEEMIT_MAX_ACCOUNT_NAME_LENGTH);
		$this->assertEquals('0', SteemConfig::STEEMIT_MIN_PERMLINK_LENGTH);
		$this->assertEquals('256', SteemConfig::STEEMIT_MAX_PERMLINK_LENGTH);
		$this->assertEquals('2048', SteemConfig::STEEMIT_MAX_WITNESS_URL_LENGTH);
		$this->assertEquals('0', SteemConfig::STEEMIT_INIT_SUPPLY);
		$this->assertEquals('1.0E+15', SteemConfig::STEEMIT_MAX_SHARE_SUPPLY);
		$this->assertEquals('2', SteemConfig::STEEMIT_MAX_SIG_CHECK_DEPTH);
		$this->assertEquals('1024', SteemConfig::STEEMIT_MIN_TRANSACTION_SIZE_LIMIT);
		$this->assertEquals('31536000', SteemConfig::STEEMIT_SECONDS_PER_YEAR);
		$this->assertEquals('2592000', SteemConfig::STEEMIT_SBD_INTEREST_COMPOUND_INTERVAL_SEC);
		$this->assertEquals('65536', SteemConfig::STEEMIT_MAX_TRANSACTION_SIZE);
		$this->assertEquals('65536', SteemConfig::STEEMIT_MIN_BLOCK_SIZE_LIMIT);
		$this->assertEquals('393216000', SteemConfig::STEEMIT_MAX_BLOCK_SIZE);
		$this->assertEquals('1200', SteemConfig::STEEMIT_BLOCKS_PER_HOUR);
		$this->assertEquals('1200', SteemConfig::STEEMIT_FEED_INTERVAL_BLOCKS);
		$this->assertEquals('168', SteemConfig::STEEMIT_FEED_HISTORY_WINDOW_PRE_HF_16);
		$this->assertEquals('84', SteemConfig::STEEMIT_FEED_HISTORY_WINDOW);
		$this->assertEquals('604800', SteemConfig::STEEMIT_MAX_FEED_AGE_SECONDS);
		$this->assertEquals('7', SteemConfig::STEEMIT_MIN_FEEDS);
		$this->assertEquals('604800', SteemConfig::STEEMIT_CONVERSION_DELAY_PRE_HF_16);
		$this->assertEquals('5040', SteemConfig::STEEMIT_CONVERSION_DELAY);
		$this->assertEquals('10', SteemConfig::STEEMIT_MIN_UNDO_HISTORY);
		$this->assertEquals('10000', SteemConfig::STEEMIT_MAX_UNDO_HISTORY);
		$this->assertEquals('15', SteemConfig::STEEMIT_MIN_TRANSACTION_EXPIRATION_LIMIT);
		$this->assertEquals('1000', SteemConfig::STEEMIT_BLOCKCHAIN_PRECISION);
		$this->assertEquals('3', SteemConfig::STEEMIT_BLOCKCHAIN_PRECISION_DIGITS);
		$this->assertEquals('2.8147497671066E+14', SteemConfig::STEEMIT_MAX_INSTANCE_ID);
		$this->assertEquals('10', SteemConfig::STEEMIT_MAX_AUTHORITY_MEMBERSHIP);
		$this->assertEquals('10', SteemConfig::STEEMIT_MAX_ASSET_WHITELIST_AUTHORITIES);
		$this->assertEquals('127', SteemConfig::STEEMIT_MAX_URL_LENGTH);
		$this->assertEquals('7500', SteemConfig::STEEMIT_IRREVERSIBLE_THRESHOLD);
		$this->assertEquals('', SteemConfig::VIRTUAL_SCHEDULE_LAP_LENGTH);
		$this->assertEquals('', SteemConfig::VIRTUAL_SCHEDULE_LAP_LENGTH2);
		$this->assertEquals('miners', SteemConfig::STEEMIT_MINER_ACCOUNT);
		$this->assertEquals('null', SteemConfig::STEEMIT_NULL_ACCOUNT);
		$this->assertEquals('temp', SteemConfig::STEEMIT_TEMP_ACCOUNT);
		$this->assertEquals('', SteemConfig::STEEMIT_PROXY_TO_SELF_ACCOUNT);
	}

}

?>