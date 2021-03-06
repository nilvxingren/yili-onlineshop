/**
 * 
 */
package com.aladingshop.refund.service;

import java.util.Map;

import org.apache.ibatis.annotations.Param;

import com.aladingshop.refund.model.Refund;
import com.fushionbaby.common.util.BasePagination;

/**
 * @description 类描述...
 * @author 徐鹏飞
 * @date 2015年8月18日下午3:00:34
 */
public interface RefundService {
	public void add(Refund refund);

	public void updateByBatchNo(Refund refund);

	public void updateByMemberIdAndOrderCode(Refund refund);

	public void deleteById(Long id);

	public Refund findByBatchNo(String batchNo);

	public Refund findByMemberIdAndOrderCode(@Param("memberId") Long memberId,
			@Param("orderCode") String orderCode);

	int getTotal(Map<String, Object> searchParamsMap);

	public BasePagination getListPage(BasePagination page);

	void deleteByOrderCodeAndMemberId(@Param("orderCode") String orderCode,
			@Param("memberId") Long memberId);
}
